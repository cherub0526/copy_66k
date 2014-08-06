      <div class="row clearfix">
        <div class="col-md-12 column">
          <br><br>
          <div class="job-nav-bar">
            <?php echo anchor('jobs', '← 回工作列表', array('class'=>'underline'));?>
            <?php turn_back_category($category,$detail[0]['jobs_category']);?>
          </div>
          <br>
          <h2> <?php echo $detail[0]['jobs_title'];?>  @ <?php echo $detail[0]['jobs_company'];?> </h2>
          <div class="group">
            <span style="color:grey; font-weight:bold;"> <i class="glyphicon glyphicon-calendar"> </i> 刊登日期 <?php echo $detail[0]['jobs_update'];?></span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span style="color:grey; font-weight:bold;"> <i class="glyphicon glyphicon-map-marker"></i> 上班地點 <?php echo $detail[0]['jobs_place'];?> </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <span style="color:grey; font-weight:bold;" class="pull-right">
             <span class="label label-default ">新台幣 $<?php echo $detail[0]['jobs_lower'];?> 元</span>  ~ <span class="label label-default ">新台幣 $<?php echo $detail[0]['jobs_higher'];?> 元</span>
             </span>
          </div>
          <hr>
          <div>
            <?php echo $detail[0]['jobs_description'];?>
          </div>
          <br>
          <div class="well">
            <h4> 應徵方法 </h4>
            <?php echo $detail[0]['jobs_hire'];?>
          </div>
        </div>
      </div>