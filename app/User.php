<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use EntrustUserTrait;
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];
public function roles(){
    $owner = new Role();
    $owner->name         = 'owner';
    $owner->display_name = 'Project Owner'; // optional
    $owner->description  = 'User is the owner of a given project'; // optional
    $owner->save();

    $admin = new Role();
    $admin->name         = 'admin';
    $admin->display_name = 'User Administrator'; // optional
    $admin->description  = 'User is allowed to manage and edit other users'; // optional
    $admin->save();
    $createPost = new Permission();
    $createPost->name         = 'create-post';
    $createPost->display_name = 'Create Posts'; // optional
// Allow a user to...
    $createPost->description  = 'create new blog posts'; // optional
    $createPost->save();

    $editUser = new Permission();
    $editUser->name         = 'edit-user';
    $editUser->display_name = 'Edit Users'; // optional
// Allow a user to...
    $editUser->description  = 'edit existing users'; // optional
    $editUser->save();

    $admin->attachPermission($createPost);
// equivalent to $admin->perms()->sync(array($createPost->id));

    $owner->attachPermissions(array($createPost, $editUser));
// equivalent to $owner->perms()->sync(array($createPost->id, $editUser->id));

    /*$user->hasRole('owner');   // false
    $user->hasRole('admin');   // true
    $user->can('edit-user');   // false
    $user->can('create-post'); // true
    $user->hasRole('owner');   // false
    $user->hasRole('admin');   // true
    $user->can('edit-user');   // false
    $user->can('create-post'); // true*/
}

    public function hasRole($name){
        $user = User::where('username', '=', 'michele')->first();

// role attach alias
        $user->attachRole($user); // parameter can be an Role object, array, or id

// or eloquent's original technique
        $user->roles()->attach($user->id); // id only
    }

    public function can($permission){


    }

    public function ability($roles,$permissions,$options){
        $roles->ability(array('admin', 'owner'), array('create-post', 'edit-user'));
        $options = array(

);



    }

}




