<div class="mdl-cell mdl-cell--12-col mdl-card mdl-card mdl-shadow--4dp">
    <div class="mdl-card__title artificial-heading">
        <h2 class="mdl-card__title-text">Tag</h2>
    </div>
    @php
        $oldAlphabet = '';
    @endphp
    <div class="mdl-card__supporting-text tag-content">
        @foreach($tags as $tag)
            @php
                $newAlphabet = strtoupper(substr($tag->name, 0, 1));
            @endphp
            @if($newAlphabet == $oldAlphabet)
                <a href="">
                    <span class="mdl-chip mdl-chip--contact mdl-shadow--1dp">
                        <span class="mdl-chip__contact mdl-color--indigo mdl-color-text--white">
                            {{ $newAlphabet }}
                        </span>
                        <span class="mdl-chip__text">
                            {{ $tag->name }}
                        </span>
                    </span>
                </a>
            @else
                <br>
                @if ($newAlphabet != 'A')
                    <hr>
                @endif
                <h2>{{ $newAlphabet }}</h2>
                <a href="">
                    <span class="mdl-chip mdl-chip--contact mdl-shadow--1dp">
                        <span class="mdl-chip__contact mdl-color--indigo mdl-color-text--white">
                            {{ $newAlphabet }}
                        </span>
                        <span class="mdl-chip__text">
                            {{ $tag->name }}
                        </span>
                    </span>
                </a>
            @endif
            @php
                $oldAlphabet = $newAlphabet
            @endphp
        @endforeach
    </div>
</div>