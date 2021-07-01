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
* @param Maximum length of a menu item. Default - ten symbol. Format: int.
* @return HTML code of menu items. Format: string.
*/
function printItems(array $menuNames = [], array $menuLinks = [], int $items = 0, string $itemsStyle = "", int $maxLenItem = 10) : string
{
    $itemsCode = "";
    $nameItem = "";
    for ($i = 0; $i < count($menuNames); $i++){
        if (strlen($menuNames[$i]) > $maxLenItem){
            $nameItem = substr($menuNames[$i], 0, ($maxLenItem - 3)) . "...";
        }else{
            $nameItem = $menuNames[$i];
        };
        if (array_key_exists($i, $menuLinks)){
            if ($i === $items){
                $itemsCode .= "<li " . $itemsStyle . "><a href=". $menuLinks[$i] . ">" . $nameItem . "</a></li>" . PHP_EOL;
            }else{
                $itemsCode .= "<li><a href=". $menuLinks[$i] . ">" . $nameItem . "</a></li>" . PHP_EOL;
            };
        }else{
            if ($i === $items){
                $itemsCode .= "<li " . $itemsStyle . ">" . $nameItem . "</li>" . PHP_EOL;
            }else{
                $itemsCode .= "<li>" . $nameItem . "</li>" . PHP_EOL;
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
 * @param Maximum length of a menu item. Default - ten symbol. Format: int.
 * @return HTML code menu. Format: string.
 */
function printMenu(array $menuNames = [], array $menuLinks = [], int $items = 0, string $style = "header", string $itemsStyle = "", int $maxLenItem = 10) : string
{    
    $result = "";
    switch ($style){
        case "header":
            {
                $result = "<div class=\"header-menu\">" . PHP_EOL;
                $result .= "<ul>" . PHP_EOL;
                $result .= printItems($menuNames, $menuLinks, $items, $itemsStyle, $maxLenItem);
                $result .= "</ul>" . PHP_EOL;
                $result .= "</div>" . PHP_EOL;
                break;
            };
        case "footer":
            {
                $items = count($menuNames) - ($items + 1);
                $result = "<div class=\"footer-menu\">" . PHP_EOL;
                $result .= "<ul>" . PHP_EOL;
                $result .= printItems(array_reverse($menuNames), array_reverse($menuLinks), $items, $itemsStyle, $maxLenItem);
                $result .= "</ul>" . PHP_EOL;
                $result .= "</div>" . PHP_EOL;
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