<?php

class Group_Controller extends Base_Controller
{

  /**
   * Process the action from the corresponding Form
   *
   * @param $action
   * @return Laravel\View
   */
  public function action_process($action)
  {
    switch ($action) {
      //create a new group
      case "create":
        $group_name = Purifier::clean(Input::get('group_name'));
        $group_permission = Purifier::clean(Input::get('group_permission'));

        if (!empty($group_name) && !empty($group_permission) && !Sentry::group_exists($group_name)) {
          //check that the group_id does not exist before setting one
          try {
            $group_id = Sentry::group()->create(
              [
                'name' => $group_name,
                'permissions' => $group_permission
              ]
            );
          } catch (\Sentry\SentryException $e) {
            $errors = $e->getMessage();
            return Redirect::back()->with("message", $errors);
          }
          return Redirect::back()->with("message", "{$group_name} with permission level: " . Sentry::group($group_name)->permissions() . " has been added!");
        } else {
          return Redirect::back()->with("message", "There was an issue! Group Exists or Value not filled");
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

    if ($_POST) {
      $group_name = Purifier::clean(Input::get("group_name"));
      $group_permissions = Purifier::clean(Input::get("group_permissions"));


      try {
        $update = $group->update(
          [
            'name' => $group_name,
            'permissions' => json_decode($group_permissions, true)
          ]);

        if ($update) {
          return Redirect::back()
            ->with('msg', 'Changed OK!')
            ->with_input();
        } else {
          return Redirect::back()
            ->with('errors', 'Group credentials did not update, Nothing to update')
            ->with_input();
        }

      } catch (\Sentry\SentryException $e) {
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
        } catch (\Sentry\SentryException $e) {
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

  public function action_rules()
  {
    $permissions = DB::query("SELECT * FROM rules");
    if ($_POST) {
      $rule = Purifier::clean(\Laravel\Input::get("rule"));
      $desc = Purifier::clean(\Laravel\Input::get("description"));

      $insert = DB::table("rules")->insert(['rule' => $rule, 'description' => $desc]);

      if ($insert)
        return Redirect::back()->with("message", "Added");
      else
        return Redirect::back()->with("message", "There was a problem {$insert} rows affected");
    }
    return \Laravel\View::make("group.rules")
      ->with("permissions", $permissions);
  }


}
