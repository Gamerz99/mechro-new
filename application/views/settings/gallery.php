<?php
$mainmenu = $this->mainmenu->buildMenu($session_data['id'], 7);
$prof_inf = $this->messages->getUserInf($session_data['id']);
$data['title'] = "GALLERY ";
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
                Gallery
            </h3>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Gallery</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-body ">
                                <a href="<?php echo base_url(); ?>index.php/settings/add_gallery"  type="button" class="btn btn-success pull-right ">
                                    Add New Image
                                </a>
                            </div>        
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-striped dataTable" width="100%">
                                    <thead>
                                        <tr>
                                            <th> ID </th>
                                            <th> Category Name </th>
                                            <th> Image </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if(!empty($gallerys)){
                                        foreach ($gallerys as $gallery) { ?>
                                            <tr>
                                                <td> <?php echo $gallery['Id'] ?></td>
                                                <td> <?php echo $gallery['Category'] ?></td>
                                                <td> <a href="<?php echo base_url(); ?>gallery/<?php echo $gallery['Image'] ?>" target="_blank"> <img height="100px" width="auto" src="<?php echo base_url(); ?>gallery/<?php echo $gallery['Image'] ?>"/> </a> </td>
                                                <td class="center">
                                                    <?php echo form_open('settings/delete_gallery', 'id="frm1' . $gallery['Id'] . '"'); ?>
                                                    <span class="btn-group">
                                                        <a href="<?php echo base_url(); ?>index.php/settings/add_gallery/<?php echo $gallery['Id'] ?>"
                                                           class="btn btn-block btn-success">   <i
                                                                    class="fa fa-pencil"></i></a>
                                                    </span>
                                                    <span class="btn-group">
                                                        <?php
                                                        echo form_hidden('Id', $gallery['Id']);
                                                        echo '<a href="#" class="btn btn-block btn-danger" onclick="confirm_delete(' . $gallery['Id'] . ')" > <i class="fa fa-close"></i> </a>';
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





