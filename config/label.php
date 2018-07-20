

<?php 

    return [
        'inputContainer' => '<div class="form-group m-form__group">{{content}}</div>',
        'input' => '

      
            <label for="{{name}}">
            {{value}}
            </label>
            <input type="{{type}}"  name="{{name}}" {{attrs}} aria-describedby="emailHelp" placeholder="Enter {{label}}">
          
        
        ',        
        'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>'
    ];
?>