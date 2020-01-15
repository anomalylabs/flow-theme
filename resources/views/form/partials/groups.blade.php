<div class="card-{{ section.type ?: 'deck' }}" {{ html_attributes(section.attributes) }}>
    {% for section in groups %}
        {% include "theme::form/partials/section" %}
    {% endfor %}
</div>
