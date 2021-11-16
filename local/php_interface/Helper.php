<?
class Helper{
    public static function print_d($ar, $isOnlyToConsole = true) {
        if (!$GLOBALS['USER']->IsAdmin()) return;
        if (!$isOnlyToConsole){
            echo '<pre>';
            print_r($ar);
            echo '</pre>';
        }
        echo '<script>console.log('.json_encode($ar, JSON_PARTIAL_OUTPUT_ON_ERROR).');</script>';
    }
}