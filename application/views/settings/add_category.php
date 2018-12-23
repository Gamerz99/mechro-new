
<?php
$mainmenu = $this->mainmenu->buildMenu($session_data['id'], 2);
$prof_inf = $this->messages->getUserInf($session_data['id']);
$data['title'] = "ADD CATEGORY";
$data['mainmenu'] = $mainmenu;
$data['profinf'] = $prof_inf;
$data['userinf'] = $session_data;
if (isset($msg)) {
    $data['msg'] = $this->messages->getMessage($msg);
}
$this->load->view('layout/header3', $data);
?>
 <div class="content-wrapper" role="main">
    <div class="">
        <section class="content-header">
            <h3>
                Add Category
            </h3>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Add Category</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">please add /edit category</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <br />
                                    <?php echo form_open('settings/save_category', 'id="form1" data-parsley-validate class="form-horizontal form-label-left"'); ?>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <?php
                                            echo form_hidden('id', $category['id']);
                                            echo form_input('name', $category['name'], 'class="form-control col-md-7 col-xs-12"');
                                            ?>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button class="btn btn-primary btn" type="reset">Reset</button>
                                        <button type="submit" value="Validate!" class="btn btn-success pull-right">Submit</button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
$this->load->view('layout/footer3');
?>
<script type="text/javascript" src="<?php echo base_url(); ?>layout/js/jquery.validate.js"></script>
<script>
    $(document).ready(function () {
        jQuery.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
        }, "Please enter only letters without space.");
        $("#form1").validate({
            errorElement: "p",
            rules: {
                name: {
                    required: true
                }
            },
            errorPlacement: function (error, element) {
                error.appendTo(element.parent());
            }
        });
    }
    );
</script>
