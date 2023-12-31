@extends('personal.layouts.main')

@section('content')
            @if($projects->count() <= 0)
        <div class="welcome__text w-25">
            <main class="content__main">
                <div class="w-50">
                <h2 class="content__main-heading">Перед тем как создать задачу,
                    сначало создайте проект</h2>
                <a class="button button--transparent button--plus content__side-button"
                   href="{{ route('main.project.create') }}">Добавить проект</a>
                </div>
            </main>
        </div>
            @else
    <main class="content__main">
        <h2 class="content__main-heading">Добавление задачи</h2>
        <form class="form" action="{{ route('main.task.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form__row">
                <label class="form__label" for="name">Название <sup>*</sup></label>
                <input type="text" class="form__input @error('title') form__input--error @enderror"
                       placeholder="Введите название" name="title" autocomplete="off"
                       value="{{ old('title') }}"
                >
                @error('title')
                <span class="form__message" role="alert">
                      <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>


            <div class="form__row">
                <label class="form__label" for="project">Проект <sup>*</sup></label>
                <select name="project_id" class="form__input form__input--select">
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}"
                            {{ $project->id == old('project_id') ? 'selected' : ''}}
                        >{{ $project->title }}</option>
                    @endforeach
                </select>
                @error('project_id')
                <span class="form__message" role="alert">
                      <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
            <div class="form__row">
                <label class="form__label" for="date">Дата выполнения</label>

                    <input type="datetime-local" class="form__input @error('deadline') form__input--error @enderror" name="deadline"
                           value="{{ old('deadline') }}">

                @error('deadline')
                <span class="form__message" role="alert">
                      <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
            <div class="form__row">
                <label class="form__label" for="file">Файл</label>
                <div class="form__input-file">
                        <input class="visually-hidden" type="file" name="file" id="file" value="">
                    <label class="button button--transparent" for="file">
                        <span>Выберите файл</span>
                    </label>
                </div>
                @error('file')
                <span class="form__message" role="alert">
                      <strong>{{ $message }}</strong>
                                </span>
                @enderror
            </div>
            <div class="form__row form__row--controls">
                <input class="button" type="submit" name="" value="Добавить">
            </div>
        </form>

    </main>
    <!-- /.content -->

    <!-- /.content-wrapper -->
            @endif
@endsection
