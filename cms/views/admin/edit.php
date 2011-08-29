<div id="box">
    <h3>Manage Page </h3>
<?php   echo \Form::open('cms/admin/edit'); ?>
    <fieldset>
<p>
    <?php
    echo Form::label('Page Title');    
   echo \Form::input("page_title",Arr::element($validated,'page_title',$view->page_title));
   echo    \Arr::element($val_error, 'page_title', false);
   ?>
</p>     
<p>
    <?php
    echo Form::label('Meta Keyword');    
   echo \Form::input("meta_keyword",Arr::element($validated,'meta_keyword',$view->meta_keyword));
   echo \Arr::element($val_error, 'meta_keyword', false);
   ?>
</p>     
<p>
    <?php
    echo Form::label('Meta Description');    
   echo \Form::input("meta_description",Arr::element($validated,'meta_description',$view->meta_description));
   echo \Arr::element($val_error, 'meta_description', false);
   ?>
</p>     
<p>
    <?php   echo Form::label('Slug');     
      echo \Form::input("page_url",Arr::element($validated,'page_url',$view->page_url));
      echo Html::br().Arr::element($val_error, 'page_url', false);
  
 ?>
</p>
<p>
    <?php   echo Form::label('Status');    
   echo \Form::select("page_status",$view->page_status,array('live'=>'Live','draft'=>'Draft'));
   
 ?>
</p>
<p>
 <?php
 echo \Form::textarea(
         array('id'=>'page_content','name'=>'page_content','rows'=>5,'cols'=>80,'value'=>Arr::element($validated,'page_content',$view->page_content))
         );
 echo HTML::br().Arr::element($val_error, 'page_content', false);
 ?>
    
</p>
<p>
    <?php echo Form::hidden('id',$view->id); echo Form::submit('btn_addpage', 'Save');?>
</p>
</fieldset>
 <?php echo \Form::hidden(\Config::get('security.csrf_token_key'), \Security::fetch_token());  echo \Form::close();?>
</div>