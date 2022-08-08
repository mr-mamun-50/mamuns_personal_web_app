Hi, {{ $name }}

<?php echo $reply_msg; ?>

<br><br>
<div>
    <a href="{{ route('home') }}">
        Visit my personal website to get more information
    </a>
</div>
<br>

Thanks,<br>
{{ config('app.name') }}
