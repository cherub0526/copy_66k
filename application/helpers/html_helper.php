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
?>