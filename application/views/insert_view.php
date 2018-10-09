<html>
    <head>
        <title>Insert Data Into Database Using CodeIgniter Form</title>
        <!-- <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
        <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" /> -->
    </head>
    <body>

        <!-- <div id="container"> -->
            <?php echo form_open('home/add_country'); ?>
             
            <?php if (isset($message)) { ?>
                <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
            <?php } ?>
                 <?php echo form_label('Country Name'); ?> <?php echo form_error('cname'); ?> <br />
          <?php echo form_input(array('id' => 'cname', 'name' => 'cname', 'class'=>'form-control', 'placeholder'=>'Country Name')); ?><br />

            <?php echo form_label('Country Short Name'); ?><?php echo form_error('csname'); ?> <br />
          <?php echo form_input(array('id' => 'csname', 'name' => 'csname', 'class'=>'form-control', 'placeholder'=>'Country Short Name')); ?><br />

            <?php echo form_label('Student Mobile No. :'); ?> <?php echo form_error('dmobile'); ?><br />
            <?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '10 Digit Mobile No.')); ?><br />

            <?php echo form_label('Student Address :'); ?> <?php echo form_error('daddress'); ?><br />
            <?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?><br />

            <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
            <?php echo form_close(); ?><br/>
           <!-- <div id="fugo">

            </div>
        </div> -->
    </body>
</html>
