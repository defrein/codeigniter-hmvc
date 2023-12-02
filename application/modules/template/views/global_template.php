<?php
$this->load->view("template/load_styles")

?>

<h4>This is header section</h4>
<p>Area to load Dynamic Content</p>
<p><?php $this->load->view($page_content); ?></p>
<?php
$this->load->view("template/load_script")

?>