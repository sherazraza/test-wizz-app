<template>
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a
                href="{{route('admin.dashboard')}}"
                class="navbar-brand mx-4 mb-3"
            >
                <img class="" src="/logo.webp" alt="" />
            </a>

            <div class="navbar-nav w-100">
                <a
                    href="{{route('admin.dashboard')}}"
                    class="nav-item nav-link active"
                    ><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a
                >

                <a
                    href="{{route('admin.categories')}}"
                    class="nav-item nav-link"
                    ><i class="fas fa-compress me-2"></i>Orders</a
                >

                <a
                    href="{{route('admin.categories')}}"
                    class="nav-item nav-link"
                    ><i class="fa fa-laptop me-2"></i>Invoices</a
                >
                <!-- <div class="nav-item dropdown">
                    <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown"
                        ><i class="fa fa-laptop me-2"></i>Pages</a
                    >
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{route('admin.home')}}" class="dropdown-item"
                            >Home</a
                        >
                        <a
                            href="{{route('admin.videoediting')}}"
                            class="dropdown-item"
                            >Video Editing Service</a
                        >
                        <a href="{{route('admin.works')}}" class="dropdown-item"
                            >3D and CGI Service</a
                        >
                        <a href="{{route('admin.about')}}" class="dropdown-item"
                            >About Us</a
                        >
                        <a
                            href="{{route('admin.contact')}}"
                            class="dropdown-item"
                            >Contact Us</a
                        >
                        <a
                            href="{{route('admin.imageEditing')}}"
                            class="dropdown-item"
                            >Image Editing Pricing</a
                        >
                        <a
                            href="{{route('admin.videoPricing')}}"
                            class="dropdown-item"
                            >Video Editing Pricing</a
                        >
                        <a
                            href="{{route('admin.allportfolios')}}"
                            class="dropdown-item"
                            >Portfolios</a
                        >
                    </div>
                </div> -->
                <!--  <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->
            </div>
        </nav>
    </div>
</template>
<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>
