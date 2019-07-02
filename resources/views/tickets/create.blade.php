@extends('master')
@section('title', 'Создать заявку')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header">
                <h5 class="float-left">Создать заявку</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <form>
                    <fieldset>
                        <div class="form-group">
                            <label for="title" class="col-lg-12 control-label">Заголовок</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-lg-12 control-label">Сообщение</label>
                            <div class="col-lg-12">
                                <textarea class="form-control" rows="3" id="content"></textarea>
                                <span class="help-block">Задавайте любые вопросы</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button class="btn btn-default">Отмена</button>
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection