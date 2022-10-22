{{--{{ Form::label('name', 'Title') }}--}}
{{--{{ Form::text('name') }}<br>--}}
{{--{{ Form::label('body', 'Сontent') }}--}}
{{--{{ Form::textarea('body')}}<br>--}}

<div class="mb-2">
    <label for="name">Title</label>
    <textarea name="name" class="form-control" id="name" placeholder="Example of a text field"
              required></textarea>
    <div class="invalid-feedback">
        Please name the article
    </div>
</div>

<div class="mb-2">
    <label for="body">Сontent</label>
    <textarea name="body" class="form-control" id="body" placeholder="Example of a text field"
              required></textarea>
    <div class="invalid-feedback">
        Please enter the text in the text box.
    </div>
</div>
