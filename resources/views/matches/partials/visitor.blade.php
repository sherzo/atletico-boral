@if($match->visitor->athlete()->count() != 0)
<h3>{{ $match->visitor->name }}</h3>
<fieldset>
    <div class="body table-responsive">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th class="cell"></th>
                    @foreach($generals as $key => $general)
                        <th class="align-center" colspan="{{ statisticsGeneral($general->individual) }}">   
                            {{ $general->type }}
                        </th>
                    @endforeach
                </tr>
                <tr>
                    <th>ATLETAS</th>
                    @foreach($individuals as $key => $individual)
                        @if($individual->status == 1)
                            <th height="150px">
                                <div class="vertical">{{ $individual->action }}</div>
                            </th>
                            @php ($iteration++)
                        @endif
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($match->visitor->athlete as $key => $athlete)
                    <tr>
                        <td>{{ $athlete->name }}</td>
                        @for($i = 0; $i < $iteration; $i++)
                            <td>
                                <input type="number" name="visitor_avg[{{ $athlete->id }}][]" value="0" pattern="[0-9]{2}" max="18" style="width:40px">
                            </td>
                        @endfor
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</fieldset>
@endif