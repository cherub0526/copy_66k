<?php
  function active($value,$method)
  {
    if($method == 'tab')
    {
      if($value == 1)
      {
        echo " active";
      }
    }
    else if($method == 'nav')
    {
      if($value == 1)
      {
        echo " class='active'";
      }
    }
  }

  function salary($salary)
  {
    if($salary < 66000)
    {

    }
    else if($salary >= 66000 && $salary < 120000)
    {

    }
    else if($salary >= 120000 && $salary < 180000)
    {

    }
    else
    {

    }
  }

  function turn_back_category($title,$own_id)
  {
    foreach($title as $title)
    {
      if($title['category_id'] == $own_id)
      {
        echo anchor('jobs/category/' . $title['category_id'], '看更多 ' . $title['category_title'] . ' 的工作 →', array('class'=>'underline pull-right'));
      }
    }

  }
?>