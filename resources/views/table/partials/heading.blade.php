@if ($table->getOption('title') || $table->getOption('description'))
<v-container>
    <v-card>

        @if ($table->getOption('title'))
        <div class="title">
            {{ $table->getOption('title') }}
        </div>
        @endif
    
        @if ($table->getOption('description'))
        <div class="subtitle-1">
            {{ $table->getOption('description') }}
        </div>
        @endif
    
    </v-card>
</v-container>
@endif
