<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('dashboard/sectionHead'); ?>
</head>
<body>
    <div class="d-flex align-items-strech vh-100">
    <?php $this->load->view('dashboard/sectionSidebar'); ?>
        <div class="container-fluid">
            <?php $this->load->view('dashboard/sectionTopbar'); ?>
            <?php $this->load->view('product/sectionContent'); ?>
        </div>
    </div>
    <?php $this->load->view('dashboard/sectionBottom'); ?>
</body>
</html>