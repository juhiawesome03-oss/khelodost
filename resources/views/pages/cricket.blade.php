@extends('sports_master')

@section('sports_body')

<main class="layout-content-center p-3">
    <div class="card shadow-sm mb-4">
        <div class="card-body p-0">
            <table class="table table-bordered text-center mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="text-start" style="width: 40%">🏏 Cricket</th>
                        <th style="width: 20%">1</th>
                        <th style="width: 20%">X</th>
                        <th style="width: 20%">2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- Cricket  -->
                        <td class="text-start px-3">
                            <div class="match-layout">
                                <!-- Left Side: Date & Time -->
                                <div class="left-side">
                                    <div>Today</div>
                                    <div>6:00 PM</div>
                                </div>

                                <!-- Vertical Divider -->
                                <div class="middle-divider"></div>

                                <!-- Right Side: Teams -->
                                <div class="right-side">
                                    <div>India</div>
                                    <div>Sri Lanka</div>
                                </div>
                            </div>
                        </td>

                        <!-- Buttons under 1 -->
                        <td>
                            <div class="btn-pair-group">
                                <a class="btn btn-info btn-sm">2.32</a>
                            </div>
                        </td>

                        <!-- Buttons under X -->
                        <td>
                            <div class="btn-pair-group">
                                <a class="btn btn-info btn-sm">1.72</a>
                            </div>
                        </td>

                        <!-- Buttons under 2 -->
                        <td>
                            <div class="btn-pair-group">
                                <a class="btn btn-info btn-sm">0</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
