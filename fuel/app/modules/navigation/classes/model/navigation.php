<?php
namespace Navigation;
class Model_Navigation extends \Orm\Model {
    //put your code here
    protected static $_properties=array(
        'id','link_type',
        'page_id','position',
        'module_name','nav_name'
    );
        protected  static $_table_name='navigation';
         public function _validation_unique($val, $options)
        {
        list($table, $field) = explode('.', $options);

        $result = DB::select("LOWER (\"$field\")")
            ->where($field, '=', Str::lower($val))
            ->from($table)->execute();

        return ! ($result->count() > 0);
    }

}
?>