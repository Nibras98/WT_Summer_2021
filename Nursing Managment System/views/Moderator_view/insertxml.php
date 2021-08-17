<?php
    
    header('Location:info.php');
    
    if(isset($_POST['insert'])){
    
        $xmldoc = new DomDocument( '1.0' );
        $xmldoc->preserveWhiteSpace = false;
        $xmldoc->formatOutput = true;


        $xname = $_POST['item_name'];
        $xcost = $_POST['item_cost'];
        $xrecieved = $_POST['item_recieved'];
        $xsold = $_POST['item_sold'];
        $xunsold = $_POST['item_unsold'];

        if( $xml = file_get_contents( 'data.xml') ) {
            $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );
        
            // find the headercontent tag
            $root = $xmldoc->getElementsByTagName('inventory')->item(0);
        
            // create the <product> tag
            $item = $xmldoc->createElement('item');
        
            // add the product tag before the first element in the <headercontent> tag
            $root->insertBefore( $item, $root->firstChild );
        
            // create other elements and add it to the <product> tag.
            $nameElement = $xmldoc->createElement('name');
            $item->appendChild($nameElement);
            $nameText = $xmldoc->createTextNode($xname);
            $nameElement->appendChild($nameText);
        
            $costElement = $xmldoc->createElement('cost');
            $item->appendChild($costElement);
            $costText = $xmldoc->createTextNode($xcost);
            $costElement->appendChild($costText);

            $recievedElement = $xmldoc->createElement('recieved');
            $item->appendChild($recievedElement);
            $recievedText = $xmldoc->createTextNode($xrecieved);
            $recievedElement->appendChild($recievedText);

            $soldElement = $xmldoc->createElement('sold');
            $item->appendChild($soldElement);
            $soldText = $xmldoc->createTextNode($xsold);
            $soldElement->appendChild($soldText);

            $unsoldElement = $xmldoc->createElement('available');
            $item->appendChild($unsoldElement);
            $unsoldText = $xmldoc->createTextNode($xunsold);
            $unsoldElement->appendChild($unsoldText);
        
            $xmldoc->save('data.xml');
        }
        
    }

?>