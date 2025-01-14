<h1> My View </h1>
<?php echo $value_id; ?>
{{ $value_id }} {{ $myinput }}

<form action="{{ url('/mycontroller') }}" method="post">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">
        submit
    </button>
</form>
<?php for ($i = 1; $i <= 12; $i++) { ?>
<div class=''>
    <p class='m-0'>{{ $myinput }} x {{ $i }} = {{ $i * $myinput }}</p>
</div>
<?php } ?>
