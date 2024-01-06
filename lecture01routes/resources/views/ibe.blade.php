{{ 1000 + 1024 }}




@if ($num % 2 == 0)
    even
@else
    odd
@endif



@for ($i = 2001; $i <= 2024; $i++)
    {{ $i }}<br>
@endfor




@foreach ($name as $studentName)
    {{ $studentName }}<br>
@endforeach






<script>

var params = @json($name);

console.log(params);
document.write(params);

</script>
