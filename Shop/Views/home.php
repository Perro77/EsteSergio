<html xmlns="http://www.w3.org/1999/html">
    <head>
        <title><?php echo $data["page_tag"]; ?></title>
    </head>
    <body>
        <?php det($data); ?>
        <section id="<?php echo $data["page_id"]; ?>"
            <h1><?php echo $data["page_title"]; ?></h1>
            <p><?php echo $data["page_content"]; ?></p>
        </section>
        <?php echo base_url(); ?>
    </body>
</html>