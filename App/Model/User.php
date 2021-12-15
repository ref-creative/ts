<?php


abstract class UserObject {

    public static function All()
    {
        return QUE()->sTable(static::USER_TABLE);
    }
    public static function User()
    {
        QUE()->sTable(static::USER_TABLE);
        return SQL_OBJECT('id',static::USER);
    }
}
class User extends UserObject {

    /*** Define user table ***/

    const USER_TABLE = "users";
}

class Auth extends UserObject {

    /*** Define user table ***/

    const USER_TABLE = "users";
    const USER = SESSION_ID;
}



/*** usage
 *
 * User::All(); // all result
 *
 * Auth::User()->id // result object
 *
 * ***/


