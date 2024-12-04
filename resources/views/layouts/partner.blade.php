<style>
    .nav-tabs .nav-link {
        color: #000;
    }

    .nav-tabs .nav-link:hover {
        background-color: #D4AF37;
        color: #fff;
    }

    .nav-tabs .nav-link.active {
        background-color: #D4AF37;
        color: #fff;
    }
</style>

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('partner.dashboard') }}?tab=dashboard">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('partner.listtenda') }}?tab=pengelolaantenda">Pengelolaan Tenda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('partner.databooking') }}?tab=databooking">Data Booking</a>
    </li>
</ul>

<script>
    //* set active navtabs when clicking
    $(document).ready(function() {
        var activeTab = getParameterByName('tab');
        $('.nav-link[href*="' + activeTab + '"]').addClass('active');
    });

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
</script>