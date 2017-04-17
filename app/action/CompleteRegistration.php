<?php
/**
 *  CompleteRegistration.php
 *
 *  @author     {$author}
 *  @package    Familytree
 *  @version    $Id: 7eaa7a065e4bbc15f8e3a92ab9fea5ab5d4d9fe4 $
 */

/**
 *  completeRegistration Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Familytree
 */
class Familytree_Form_CompleteRegistration extends Familytree_ActionForm
{
    /**
     *  @access protected
     *  @var    array   form definition.
     */
    protected $form = array(

      'user_name' => array(
          'type' => VAR_TYPE_STRING,
          'form_type' => FORM_TYPE_TEXTAREA,
          'name' => 'ユーザ名',
          'max' => 140,
          'required' => true,
        ),

      'user_password' => array(
          'type' => VAR_TYPE_STRING,
          'form_type' => FORM_TYPE_TEXTAREA,
          'name' => 'パスワード',
          'max' => 140,
          'required' => true,
        ),

    );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    protected function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

/**
 *  completeRegistration action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Familytree
 */
class Familytree_Action_CompleteRegistration extends Familytree_ActionClass
{
    /**
     *  preprocess of completeRegistration Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
     */
    public function prepare()
    {
        if ($this->af->validate() > 0) {
            // forward to error view (this is sample)
            return 'error';
        }
        $sample = $this->af->get('sample');

        return ViewUserRegister;
    }

    /**
     *  completeRegistration action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    public function perform()
    {
        return 'completeRegistration';
    }
}
