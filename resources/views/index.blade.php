@extends('layouts.master')
@section('content')
<div class='container'>    
    <div class='row'>
        <div class='col-sm-3 left'>
            <div class='social d-flex flex-row flex-wrap'>
                <div class="d-flex flex-row">
                    <a href='#' class='bgtw'><img src='img/twitter_white.svg' width='20px' height='20px'></a>
                    <div>
                        <p>1200</p>
                        <p style='font-size: 12px;'>Твитов</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <a href='#' class='bgdark'><img src='img/github_white.svg' width='20px' height='20px'></a>
                    <div>
                        <p>1200</p>
                        <p style='font-size: 12px;'>Коммитов</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <a href='#' class='bgvk'><img src='img/vk_white.svg' width='20px' height='20px'></a>
                    <div>
                        <p>1200</p>
                        <p style='font-size: 12px;'>Лайков</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <a href='#' class='bgfb'><img src='img/facebook_white.svg' width='20px' height='20px'></a>
                    <div>
                        <p>1200</p>
                        <p style='font-size: 12px;'>Подписчиков</p>
                    </div>
                </div>
            </div>
            <div>
                <div class='widget'>
                    <a href='#'>
                        Голосования
                    </a>
                </div>
                <div class='poll'>
                    <h2>
                        Как вам блог?
                    </h2>
                    <form method='GET' action ='/'>
                        <div class='custom-form-check'>
                            <input class="form-check-input" type='radio' type="radio" name="exampleRadios" id="soso">
                            <label class="form-check-label" for="soso">
                                <span></span>
                                Такое себе
                            </label>
                        </div>
                        <div class='custom-form-check'>
                            <input class="form-check-input" type='radio' type="radio" name="exampleRadios" value='1' id="ok">
                            <label class="form-check-label" for="ok">
                                <span></span>
                                Сойдет
                            </label>
                        </div>
                        <button type="submit" class="btn btn-poll btn-danger">Проголосовать</button>
                        <button type="submit" class="btn btn-poll btn-danger">Результаты</button>
                    </form>
                </div>
            </div>
        </div>
        <div class='col-sm-9'>
            dsadsa
            <div class='row'>
                <div class='col-sm-4'>
                    sdssd
                </div>

                <div class='col-sm-8'>
                    sss
                </div>
            </div>
        </div>
    </div>
</div>
@endsection