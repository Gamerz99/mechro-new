<?php
$mainmenu = $this->mainmenu->buildMenu($session_data['id'], 2);
$prof_inf = $this->messages->getUserInf($session_data['id']);
$data['title'] = "PRODUCT ";
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
                <?php echo $page; ?>
            </h3>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Products</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-body ">
                                <a href="<?php echo base_url(); ?>index.php/settings/add_machinery"  type="button" class="btn btn-success pull-right ">
                                    Add New Product
                                </a>
                            </div>
                            <div class="box-body">
                                <table id="example2" class="table table-bordered table-striped dataTable" width="100%">
                                    <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Product Name </th>
                                        <th> Description </th>
                                        <th> Category </th>
                                        <th> Image </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(!empty($products)){
                                        foreach ($products as $product) { ?>
                                            <tr>
                                                <td> <?php echo $product['Id'] ?></td>
                                                <td> <?php echo $product['Name'] ?></td>
                                                <td> <?php echo $product['Description'] ?></td>
                                                <td> <?php echo $category[$product['Category']] ?></td>
                                                <td> <a href="<?php echo base_url(); ?>products/<?php echo $category[$product['Category']] ?>/<?php echo $product['Image'] ?>" target="_blank"> <img height="100px" width="auto" src="<?php echo base_url(); ?>products/<?php echo $category[$product['Category']] ?>/<?php echo $product['Image'] ?>"/> </a> </td>
                                                <td class="center">
                                                    <?php echo form_open('settings/delete_machinery', 'id="frm1' . $product['Id'] . '"'); ?>
                                                    <span class="btn-group">
                                                        <a href="<?php echo base_url(); ?>index.php/settings/add_machinery/<?php echo $product['Id'] ?>"
                                                           class="btn btn-block btn-success">   <i
                                                                class="fa fa-pencil"></i></a>
                                                    </span>
                                                    <span class="btn-group">
                                                        <?php
                                                        echo form_hidden('Id', $product['Id']);
                                                        echo '<a href="#" class="btn btn-block btn-danger" onclick="confirm_delete(' . $product['Id'] . ')" > <i class="fa fa-close"></i> </a>';
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





