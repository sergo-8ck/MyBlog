<label for="">Статус</label>
<select name="published" class="form-control">
    @if (isset($article->id))
        <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
        <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
    @else
        <option value="1">Опубликовано</option>
        <option value="0">Не опубликовано</option>
    @endif
</select>

<label for="">Фамили Имя Отчество</label>
<input type="text" class="form-control" name="title" placeholder="Фамили Имя Отчество" value="{{$article->title or ""}}" required>

<label for="">Slug (уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$article->slug or ""}}" readonly="">

<label for="">Программа обучения</label>
<select class="form-control" name="categories[]" multiple="">

    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

{{--<label for="">Краткое описание</label>--}}
{{--<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short or ""}}</textarea>--}}

<label for="">Дата обучения</label>
<input type="date" name="date" class="form-control" value="{{$article->date or old('date', date('Y-m-d'))}}" required>

<label for="">Номер документа</label>
<input type="text" class="form-control" name="document" placeholder="Номер документа" value="{{$article->document or ""}}" required>

<label for="">Срок действия документа</label>
<input type="date" name="datedoc" class="form-control" value="{{$article->datedoc or old('datedoc', date('Y-m-d'))}}" required>

<label for="">Комментарий</label>
<textarea class="form-control" id="description" name="description">{{$article->description or ""}}</textarea>

<hr>

{{--<label for="">Мета заголовок</label>--}}
{{--<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title or ""}}" required>--}}

{{--<label for="">Мета описание</label>--}}
{{--<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description or ""}}" required>--}}

{{--<label for="">Ключевые слова</label>--}}
{{--<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$article->meta_keyword or ""}}" required>--}}

<hr>

<input class="btn btn-primary" type="submit" value="Сохранить">