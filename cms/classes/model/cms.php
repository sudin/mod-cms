<?php
namespace Cms;
class Model_Cms extends \Orm\Model {
    //put your code here
    protected static $_properties=array(
        'id','page_title',
        'meta_keyword','meta_description',
        'page_url','page_status','page_content'
        );
        protected  static $_table_name='cms_pages';
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