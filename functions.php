<?php
namespace spaceMenu;

/**
 * The function gets an array by key from a multidimensional array.
 * @param An array of associative arrays. Default empty array.
 * @param The key is in an associative array. Default the first element of the array. Format: string.
 * @return Associative array.
 */
function arrayByKey(array $workingArray = [], string $key = "0") : array
{
    $resultArray = [];
    foreach ($workingArray as $value){
        if (array_key_exists($key, $value)){
            array_push($resultArray, $value[$key]);
        };
    };
    return $resultArray;
};

/**
* The function generates the HTML code of the menu items.
* @param An array of items menu. Default empty array. Format: array.
* @param An array of links menu. Default empty array. Format: array.
* @param Current items menu. Default - 0. Format: integer.
* @param Style of current item menu. Css slass, defauld - no. Format: string.
* @return HTML code of menu items. Format: string.
*/
function printItems(array $menuNames = [], array $menuLinks = [], int $items = 0, string $itemsStyle = "") : string
{
    $itemsCode = "";
    for ($i = 0; $i < count($menuNames); $i++){
        if (array_key_exists($i, $menuLinks)){
            if ($i === $items){
                $itemsCode .= "<li " . $itemsStyle . "><a href=". $menuLinks[$i] . ">" . $menuNames[$i] . "</a></li\r\n>";
            }else{
                $itemsCode .= "<li><a href=". $menuLinks[$i] . ">" . $menuNames[$i] . "</a></li\r\n>";
            };
        }else{
            if ($i === $items){
                $itemsCode .= "<li " . $itemsStyle . ">" . $menuNames[$i] . "</li\r\n>";
            }else{
                $itemsCode .= "<li>" . $menuNames[$i] . "</li\r\n>";
            };
        };

    };
    return $itemsCode;
};

/**
 * The function generates the HTML code of the menu.
 * @param An array of items menu.Default empty array.  Format: array.
 * @param An array of links menu. Default empty array. Format: array.
 * @param Current item of menu. Default - 0. Format: integer.
 * @param Style of menu. "header" or "footer" default - "header". Format: string.
 * @param Style of current item menu. Css slass, defauld - no. Format: string.
 * @return HTML code menu. Format: string.
 */
function printMenu(array $menuNames = [], array $menuLinks = [], int $items = 0, string $style = "header", string $itemsStyle = "") : string
{    
    $result = "";
    switch ($style){
        case "header":
            {
                $result = "<div class=\"header-menu\">\r\n";
                $result .= "<ul>\r\n";
                $result .= printItems($menuNames, $menuLinks, $items, $itemsStyle);
                $result .= "</ul>\r\n";
                $result .= "</div>\r\n";
                break;
            };
        case "footer":
            {
                $items = count($menuNames) - ($items + 1);
                $result = "<div class=\"footer-menu\">\r\n";
                $result .= "<ul>\r\n";
                $result .= printItems(array_reverse($menuNames), array_reverse($menuLinks), $items, $itemsStyle);
                $result .= "</ul>\r\n";
                $result .= "</div>\r\n";
                break;
            };
    };
    return $result;
};

/**
 * The function determines the partition number
 * @param Array of partition. Default empty array.
 * @return Partition number. -1 not found.
 */

function searchPartition(array $arrayOfPartition = []) : int
{
    $foundPartition = -1;
}