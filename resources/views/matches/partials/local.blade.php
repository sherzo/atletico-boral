@if($match->local->athlete()->count() != 0)
<h3>{{ $match->local->name }}</h3>
<fieldset>
    <div class="body table-responsive">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th class="cell"></th>
                    @foreach($generals as $key => $general)
                        @if(statisticsGeneral($general->individual) != 0)
                        <th class="align-center" colspan="{{ statisticsGeneral($general->individual) }}">   
                            {{ $general->type }}
                        </th>
                        @endif
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
                @foreach($match->local->athlete as $key => $athlete)
                    <tr>
                        <td>{{ $athlete->name }}</td>
                        @for($i = 0; $i < $iteration; $i++)
                            <td>
                                <input type="number" name="local_avg[{{ $athlete->id }}][]" value="0" pattern="[0-9]{2}" max="18" style="width:40px">
                            </td>
                        @endfor
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</fieldset>
@endif