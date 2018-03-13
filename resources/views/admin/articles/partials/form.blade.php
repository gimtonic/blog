<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$article->title or ""}}" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$article->slug or ""}}" readonly="">

<label for="">Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
    <option value="0">-- без родительской категории --</option>
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>
<label for="">Краткое описание</label>
<textarea name="description_short" id="description_short" class="form-control">{{$article->description_short or ""}}</textarea>

<label for="">Полное описание</label>
<textarea name="description" id="description" class="form-control">{{$article->description or ""}}</textarea>

<label for="">Мета заголовок</label>
<textarea name="meta_title" id="description" placeholder="Мета заголовок" class="form-control">{{$article->meta_title or ""}}</textarea>

<label for="">Мета описание</label>
<textarea name="meta_description" id="description" placeholder="Мета описание" class="form-control">{{$article->meta_description or ""}}</textarea>

<label for="">Ключевые слова</label>
<textarea name="meta_keyword" id="description" placeholder="Ключевые слова" class="form-control">{{$article->meta_keyword or ""}}</textarea>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">