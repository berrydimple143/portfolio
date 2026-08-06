<?php require_once '../../src/Functions/helpers.php'; ?>
<div x-show="page === 'dashboard'" class="grid grid-cols-1 gap-3 sm:grid-cols-3 md:gap-6">
  <!-- Metric Item Start -->
  <div
    class="rounded-2xl border border-gray-200 bg-gradient-to-r from-blue-600 via-blue-500 to-blue-700 p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6"
  >
    <div
      class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800"
    >
      <?php includeWithArgs('../../images/icons/work.php', ['color' => '#000', 'class' => 'w-5 h-5', 'view' => '0 0 60 60']); ?>
      
    </div>

    <div class="mt-5 flex items-end justify-between">
      <div>
        <span class="text-sm text-gray-200 dark:text-gray-400">Projects</span>
        <h4
          class="mt-2 text-title-sm font-bold text-gray-300 dark:text-white/90"
        >
          11+
        </h4>
      </div>

      <span
        class="flex items-center gap-1 rounded-full bg-success-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-gray-300"
      >
        <?php includeWithArgs('../../images/icons/up.php', ['color' => '', 'class' => 'w-3 h-3', 'view' => '0 0 12 12']); ?>

        11.01%
      </span>
    </div>
  </div>
  <!-- Metric Item End -->

  <!-- Metric Item Start -->
  <div
    class="rounded-2xl border border-gray-200 bg-gradient-to-r from-blue-600 via-blue-500 to-blue-700 p-5 dark:border-gray-800 dark:bg-white/[0.03] md:p-6"
  >
    <div
      class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800"
    >
      <?php includeWithArgs('../../images/icons/experience.php', ['color' => '#000', 'class' => 'w-6 h-6', 'view' => '0 0 512 512']); ?>
    </div>

    <div class="mt-5 flex items-end justify-between">
      <div>
        <span class="text-sm text-gray-200 dark:text-gray-300">Experiences</span>
        <h4
          class="mt-2 text-title-sm font-bold text-gray-300 dark:text-white/90"
        >
          13+ years 
        </h4>
      </div>

      <span
        class="flex items-center gap-1 rounded-full bg-success-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-gray-300"
      >
        <?php includeWithArgs('../../images/icons/up.php', ['color' => '', 'class' => 'w-3 h-3', 'view' => '0 0 12 12']); ?>
        11.01%
      </span>
    </div>
  </div>
  <!-- Metric Item End -->

  <!-- Metric Item Start -->
  <div
    class="rounded-2xl border border-gray-200 bg-gradient-to-r from-blue-600 via-blue-500 to-blue-700 p-5 dark:border-gray-800 md:p-6"
  >
    <div
      class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800"
    >
      <?php includeWithArgs('../../images/icons/code.php', ['color' => '#000', 'class' => 'w-5 h-5', 'view' => '0 0 24 24']); ?>
    </div>

    <div class="mt-5 flex items-end justify-between">
      <div>
        <span class="text-sm text-gray-200 dark:text-gray-300">Technologies</span>
        <h4
          class="mt-2 text-title-sm font-bold text-gray-300 dark:text-gray-400"
        >
          0
        </h4>
      </div>

      <span
        class="flex items-center gap-1 rounded-full bg-error-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-gray-300 dark:bg-error-500/15 dark:text-gray-300"
      >
        <?php includeWithArgs('../../images/icons/down.php', ['color' => '', 'class' => 'w-3 h-3', 'view' => '0 0 12 12']); ?>

        0.05%
      </span>
    </div>
  </div>
  <!-- Metric Item End -->
   <!-- Metric Item Start -->
  <div
    class="rounded-2xl border border-gray-200 bg-gradient-to-r from-blue-600 via-blue-500 to-blue-700 p-5 dark:border-gray-800 md:p-6"
  >
    <div
      class="flex h-12 w-12 items-center justify-center rounded-xl bg-gray-100 dark:bg-gray-800"
    >
      <?php includeWithArgs('../../images/icons/messages.php', ['color' => '#000', 'class' => 'w-5 h-5', 'view' => '0 0 72 72']); ?>
    </div>

    <div class="mt-5 flex items-end justify-between">
      <div>
        <span class="text-sm text-gray-200 dark:text-gray-300">Messages</span>
        <h4
          class="mt-2 text-title-sm font-bold text-gray-300 dark:text-gray-400"
        >
          0
        </h4>
      </div>

      <span
        class="flex items-center gap-1 rounded-full bg-error-50 py-0.5 pl-2 pr-2.5 text-sm font-medium text-gray-300 dark:bg-error-500/15 dark:text-gray-300"
      >
        <?php includeWithArgs('../../images/icons/down.php', ['color' => '', 'class' => 'w-3 h-3', 'view' => '0 0 12 12']); ?>

        0.05%
      </span>
    </div>
  </div>
  <!-- Metric Item End -->
</div>
