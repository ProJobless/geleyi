<?php

class Group_Controller extends Base_Controller {

  public $layout = 'layouts.main';

  /**
   * Process the action from the corresponding Form
   *
   * @param $action
   * @return Laravel\View
   */
  public function action_process($action)
  {
    switch ($action) {
      //create a new gorup
      case "create":
        $group_name  = Purifier::clean(Input::get('group_name'));
        $group_level = Purifier::clean(Input::get('group_level'));

        if (!empty($group_name) && !empty($group_level) && !Sentry::group_exists($group_name)) {
          //check that the group_id does not exist before setting one
          try {
            $group_id = Sentry::group()->create(
              [
              'name'        => $group_name,
              'permissions' => (int)$group_level
              ]
            );
          }
          catch (\Sentry\SentryException $e) {
            $errors = $e->getMessage();
          }

          return Redirect::back()->with("create_group_message", "{$group_name} with permission level: {$group_level} has been added!");
        } else {
          return Redirect::back()->with("create_group_message", "There was an issue! Group Exists or Value not filled");
        }
        break;
    }

  }

  /**
   * Edit a particular group by the ID
   *
   * @param $id
   * @return Laravel\View
   */
  public function action_edit($id)
  {
    $group = Sentry::group($id);

    if ($_REQUEST == 'POST') {
      // edit the group, and redirect with a flash message
      $group_name  = Purifier::clean(Input::get($group_name));
      $group_level = Purifier::clean(Input::get($group_level));

      try {
        $update = $group->update(
          [
          'name'        => $group_name,
          'permissions' => $group_level
          ]);

        if ($update) {
          return Redirect::back()
            ->with('success', 'Changed OK!')
            ->with_input();
        } else {
          return Redirect::back()
            ->with('errors', 'Group credentials did not update')
            ->with_input();
        }

      }
      catch (\Sentry\SentryException $e) {
        $errors = $e->getMessage();
        return Redirect::back()->with_input('errors', $errors);
      }

    } else {
      return View::make('group.edit')->with('group', $group);
    }

  }

  /**
   * Depending on the route, return the respective view
   *
   * @param $display
   * @param $id
   * @return Laravel\View
   */
  public function action_view($display)
  {
    switch ($display) {

      case "all":
        try {
          $groups = Sentry::group()->all();
        }
        catch (\Sentry\SentryException $e) {
          $errors = $e->getMessage();
        }
        return View::make('group.view_all')->with('groups', $groups);
        break;

      case "new":
        return View::make('group.create');
        break;

    }
  }

  public function action_delete($id)
  {
    //@todo: write action to delete groups
  }

}
