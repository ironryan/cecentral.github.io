<?php
/**
 * Created by PhpStorm.
 * User: charlescombs
 * Date: 8/30/16
 * Time: 3:46 PM
 */

?>

{{--@section('nav-summary')--}}

    <div class="container">
        <div class="col-md-8 col-md-offset-2">

            {!! App\Parsedown::instance()->setMarkupEscaped(true)->setBreaksEnabled(true)->text($summaryContents) !!}

        </div>
    </div>

{{--@endsection--}}

