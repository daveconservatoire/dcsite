<?php

class CountryController extends Controller
{

public function actionTypeahead() {
echo '{
    "options": [
        "Option 1",
        "Option 2",
        "Option 3",
        "Option 4",
        "Option 5"
    ]
}';	
}
}