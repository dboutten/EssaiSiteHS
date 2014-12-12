<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="styles/base.css" />
	<link rel="stylesheet" type="text/css" href="styles/structure.css" />
        <link rel="stylesheet" type="text/css" href="styles/demo.css" />
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <link rel="stylesheet" type="text/css" href="styles/jquery.jscrollpane.css" media="all" />
        <title>
            <?php echo($titre); ?>
        </title>
    </head>
        <div id="global">
            <div id="tete">
                <div id="banniere">
                    <div id="logo">
                        <?php echo($logo); ?>
                    </div>
                    <div id="menu">
                        <?php echo($menu);
                        echo ($sousmenu); ?>
                    </div> 
                </div>
                <div id="logo">
                    <?php echo($logo); ?>
                </div>
                 
            </div> 
            
            <div id="corps">
                <div id="contenu">
                    <?php echo($contenu); ?>
                </div>
            </div>

            <div id="pied">
                <?php echo($pied); ?>
            </div>
        </div>
</html>