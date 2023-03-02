<x-app-layout>
    <x-slot name="header">
            @if (Auth::user()->type_user === "user")
                @include("dashboardusers")

            @else
                @include("dashboard_admin")
              
            @endif
    </x-slot>
</x-app-layout>

