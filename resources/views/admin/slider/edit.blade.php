<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Slider Content Update</h1>
    @if(!is_null($slider))
    <form action="{{ route('UpdateSlider') }}" method='POST'>
        @csrf

        <label for="heading1">Heading 1</label><br>
        <input type="text" id="heading1" name="heading1" value="{{ $slider->heading1 }}"><br>
        <label for="heading2">Heading 2</label><br>
        <input type="text" id="heading2" name="heading2" value="{{ $slider->heading2 }}"><br>
        
        <label for="text">Text</label><br>
        <textarea id="text" name="text" rows="4" cols="50">{{ $slider->text }}</textarea><br>
        

        <label for="btn1_label">Button 1 label</label><br>
        <input type="text" id="btn1_label" name="btn1_label" value="{{ $slider->button_1_label }}"><br>
        <label for="btn1_link">Button 1 link</label><br>
        <input type="url" id="btn1_link" name="btn1_link" value="{{ $slider->button_1_link }}"><br>

        <label for="btn2_label">Button 2 label</label><br>
        <input type="text" id="btn2_label" name="btn2_label" value="{{ $slider->button_2_label }}"><br>
        <label for="btn2_link">Button 2 link</label><br>
        <input type="url" id="btn2_link" name="btn2_link" value="{{ $slider->button_2_link }}"><br>
        
        <input type="hidden" value="{{ $slider->id }}" name="id">
        
        <input type="submit" value="Update">
    </form>
    

    <form action="{{ route('DeleteSlider') }}" method='POST'>
        @csrf
        <input type="hidden" value="{{ $slider->id }}" name="id">
        <input type="submit" value="Delete">
    </form>
    @else

    Page not found!!!

    @endif

    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
</body>
</html>