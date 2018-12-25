<?php
$mainmenu = $this->mainmenu->buildMenu($session_data['id'], 6);
$prof_inf = $this->messages->getUserInf($session_data['id']);
$data['title'] = "PROJECT ";
$data['mainmenu'] = $mainmenu;
$data['profinf'] = $prof_inf;
$data['userinf'] = $session_data;
if (isset($msg)) {
    $data['msg'] = $this->messages->getMessage($msg);
}
$this->load->view('layout/header2', $data);
?>
<div class="content-wrapper" role="main">
    <div class="">
        <section class="content-header">
            <h3>
                Project
            </h3>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Project</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-body ">
                                <a href="<?php echo base_url(); ?>index.php/settings/add_project"  type="button" class="btn btn-success pull-right ">
                                    Add New Project
                                </a>
                            </div>
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-striped dataTable" width="100%">
                                    <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Project Name </th>
                                        <th> Description</th>
                                        <th> Image1 </th>
                                        <th> Image2 </th>
                                        <th> Image3 </th>
                                        <th> Image4 </th>
                                        <th> Start Date </th>
                                        <th> End Date </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(!empty($projects)){
                                        foreach ($projects as $project) { ?>
                                            <tr>
                                                <td> <?php if($project['Stat'] == 0){?>
                                                    <small class='label pull-left bg-yellow' style='width: 45px'><?php echo $project['Id'] ?> </small>
                                            <?php } else {?>
                                                        <small class='label pull-left bg-green' style='width: 45px'><?php echo $project['Id'] ?> </small>

                                                    <?php } ?>
                                                </td>
                                                <td> <?php echo $project['Name'] ?></td>
                                                <td> <?php echo $project['Description'] ?></td>
                                                <td> <a href="<?php echo base_url(); ?>projects/<?php echo $project['Image1'] ?>" target="_blank"> <img height="100px" width="auto" src="<?php echo base_url(); ?>projects/<?php echo $project['Image1'] ?>"/> </a> </td>
                                                <td> <a href="<?php echo base_url(); ?>projects/<?php echo $project['Image2'] ?>" target="_blank"> <img height="100px" width="auto" src="<?php echo base_url(); ?>projects/<?php echo $project['Image2'] ?>"/> </a> </td>
                                                <td> <a href="<?php echo base_url(); ?>projects/<?php echo $project['Image3'] ?>" target="_blank"> <img height="100px" width="auto" src="<?php echo base_url(); ?>projects/<?php echo $project['Image3'] ?>"/> </a> </td>
                                                <td> <a href="<?php echo base_url(); ?>projects/<?php echo $project['Image4'] ?>" target="_blank"> <img height="100px" width="auto" src="<?php echo base_url(); ?>projects/<?php echo $project['Image4'] ?>"/> </a> </td>
                                                <td> <?php echo $project['Start_Date'] ?></td>
                                                <td> <?php echo $project['End_Date'] ?></td>
                                                <td class="center">
                                                    <?php echo form_open('settings/delete_project', 'id="frm1' . $project['Id'] . '"'); ?>
                                                    <?php if($project['Stat'] == 1){?>
                                                    <span class="btn-group">
                                                        <a href="<?php echo base_url(); ?>index.php/settings/incomplete_project/<?php echo $project['Id'] ?>"
                                                           class="btn btn-block btn-warning">   <i
                                                                class="fa fa-ban"></i></a>
                                                    </span>
                                                    <?php } else {?>
                                                    <span class="btn-group">
                                                        <a href="<?php echo base_url(); ?>index.php/settings/complete_project/<?php echo $project['Id'] ?>"
                                                           class="btn btn-block btn-success">   <i
                                                                class="fa fa-check"></i></a>
                                                    </span>
                                                <?php } ?>
                                                    <span class="btn-group">
                                                        <a href="<?php echo base_url(); ?>index.php/settings/add_project/<?php echo $project['Id'] ?>"
                                                           class="btn btn-block btn-success">   <i
                                                                class="fa fa-pencil"></i></a>
                                                    </span>
                                                    <span class="btn-group">
                                                        <?php
                                                        echo form_hidden('Id', $project['Id']);
                                                        echo '<a href="#" class="btn btn-block btn-danger" onclick="confirm_delete(' . $project['Id'] . ')" > <i class="fa fa-close"></i> </a>';
                                                        ?>
                                                    </span>
                                                    <?php echo form_close(); ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
$this->load->view('layout/footer2');
?>





