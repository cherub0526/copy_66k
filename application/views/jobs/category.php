      <div class="row clearfix">
        <div class="col-md-12 column">
          <br><br>
          <div class="job-nav-bar">
            <?php echo anchor('jobs', '← 回工作列表', array('class'=>'underline'));?>
          </div>
          <br>
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
              <?php foreach($category as $result ):?>
              <tr>
                <td>
                  <?php echo $result['jobs_id'];?>
                </td>
                <td>
                  <?php echo $result['jobs_company'];?>
                </td>
                <td>
                  <?php echo anchor('jobs/show/' . $result['jobs_id'], $result['jobs_title']);?>
                </td>
                <td>
                  <?php echo $result['jobs_update'];?>
                </td>
                <td>
                  <span class="label label-default label-success"><?php echo "新台幣 " . $result['jobs_higher'];?></span>
                </td>
              </tr>
            <?php endforeach;?>
        </tbody>
      </table>
        </div>
      </div>