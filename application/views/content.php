      <div class="row clearfix">
        <div class="col-md-12 column">
          <div class="tabbable" id="tabs">
            <ul class="nav nav-tabs">
              <?php foreach($category as $category):?>
              <li<?php active($category['category_id'],'nav');?>>
                <a href="#panel-<?php echo $category['category_id'];?>" data-toggle="tab"><?php echo $category['category_title'];?></a>
              </li>
              <?php endforeach;?>
              <!-- <li class="active">
                <a href="#panel-383009" data-toggle="tab">頁籤 2</a>
              </li> -->
            </ul>
            <div class="tab-content">
              <?php foreach($tab as $content):?>
              <div class="tab-pane<?php active($content['category_id'],'tab'); ?>" id="panel-<?php echo $content['category_id'];?>">
                <h1><?php echo anchor('jobs/category/' . $content['category_id'],$content['category_title'] );?>  <?php echo anchor('jobs/rss/' . $content['category_id'],'<img alt="Rss feed" src="' . base_url('img/rss-feed.png') . '" >');?></h1>
                <table class="table">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        企業
                      </th>
                      <th>
                        職位
                      </th>
                      <th>
                        發布日期
                      </th>
                      <th>
                        薪資水準
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($result[(int)$content['category_id']] as $category_result => $value):?>
                    <tr>
                      <td>
                        <?php echo $value['jobs_id'];?>
                      </td>
                      <td>
                        <?php echo $value['jobs_company'];?>
                      </td>
                      <td>
                        <?php echo anchor('jobs/show/' . $value['jobs_id'], $value['jobs_title']);?>
                      </td>
                      <td>
                        <?php echo $value['jobs_update'];?>
                      </td>
                      <td>
                        <span class="label label-default <?php salary($value['jobs_higher']);?>"><?php echo "新台幣 " . $value['jobs_higher'];?></span>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
    </div>