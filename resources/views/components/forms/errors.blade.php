
@props([
    'name' => 'required'
])

@error($name)
    <p class="error">{{  $message }}</p>
@enderror