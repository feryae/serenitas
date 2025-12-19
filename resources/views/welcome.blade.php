@php

    $stressReductions = [
        [
            'id' => 'b1c2a3d4-1111-4aaa-8bbb-000000000001',
            'title' => '4-7-8 Breathing',
            'description' => 'A calming breathing technique to reduce anxiety and slow the heart rate.',
            'type' => App\Enums\StressReductionTypes::from(1)->label(), // Breathing
            'duration_minutes' => 5,
            'difficulty_level' => 'beginner',
            'created_by' => App\Enums\UserRoleTypes::from(1)->label(),
            'is_active' => true,
            'created_at' => '2025-01-01 08:00:00',
            'updated_at' => '2025-01-01 08:00:00',
            'steps' => [
                [
                    'id' => 's1111111-aaaa-4aaa-8bbb-000000000001',
                    'stress_reduction_id' => 'b1c2a3d4-1111-4aaa-8bbb-000000000001',
                    'step_order' => 1,
                    'instruction' => 'Sit comfortably with your back straight and relax your shoulders.',
                    'duration_seconds' => null,
                ],
                [
                    'id' => 's1111111-aaaa-4aaa-8bbb-000000000002',
                    'stress_reduction_id' => 'b1c2a3d4-1111-4aaa-8bbb-000000000001',
                    'step_order' => 2,
                    'instruction' => 'Inhale slowly through your nose for 4 seconds.',
                    'duration_seconds' => 4,
                ],
                [
                    'id' => 's1111111-aaaa-4aaa-8bbb-000000000003',
                    'stress_reduction_id' => 'b1c2a3d4-1111-4aaa-8bbb-000000000001',
                    'step_order' => 3,
                    'instruction' => 'Hold your breath gently for 7 seconds.',
                    'duration_seconds' => 7,
                ],
                [
                    'id' => 's1111111-aaaa-4aaa-8bbb-000000000004',
                    'stress_reduction_id' => 'b1c2a3d4-1111-4aaa-8bbb-000000000001',
                    'step_order' => 4,
                    'instruction' => 'Exhale slowly through your mouth for 8 seconds.',
                    'duration_seconds' => 8,
                ],
            ],
        ],
        [
            'id' => 'b1c2a3d4-2222-4bbb-8ccc-000000000002',
            'title' => 'Body Scan Relaxation',
            'description' => 'A guided body awareness exercise to release physical tension.',
            'type' => App\Enums\StressReductionTypes::from(2)->label(), // Mindfulness
            'duration_minutes' => 10,
            'difficulty_level' => 'beginner',
            'created_by' => App\Enums\UserRoleTypes::from(2)->label(),
            'is_active' => true,
            'created_at' => '2025-01-02 09:30:00',
            'updated_at' => '2025-01-02 09:30:00',
            'steps' => [
                [
                    'id' => 's2222222-bbbb-4bbb-8ccc-000000000001',
                    'stress_reduction_id' => 'b1c2a3d4-2222-4bbb-8ccc-000000000002',
                    'step_order' => 1,
                    'instruction' => 'Lie down or sit comfortably and close your eyes.',
                    'duration_seconds' => null,
                ],
                [
                    'id' => 's2222222-bbbb-4bbb-8ccc-000000000002',
                    'stress_reduction_id' => 'b1c2a3d4-2222-4bbb-8ccc-000000000002',
                    'step_order' => 2,
                    'instruction' => 'Bring attention to your feet and notice any sensations.',
                    'duration_seconds' => 60,
                ],
                [
                    'id' => 's2222222-bbbb-4bbb-8ccc-000000000003',
                    'stress_reduction_id' => 'b1c2a3d4-2222-4bbb-8ccc-000000000002',
                    'step_order' => 3,
                    'instruction' => 'Slowly move your awareness up through your legs and torso.',
                    'duration_seconds' => 180,
                ],
                [
                    'id' => 's2222222-bbbb-4bbb-8ccc-000000000004',
                    'stress_reduction_id' => 'b1c2a3d4-2222-4bbb-8ccc-000000000002',
                    'step_order' => 4,
                    'instruction' => 'Notice your shoulders, neck, and face, releasing any tension.',
                    'duration_seconds' => 120,
                ],
            ],
        ],
        [
            'id' => 'b1c2a3d4-3333-4ccc-8ddd-000000000003',
            'title' => '5-4-3-2-1 Grounding',
            'description' => 'A sensory grounding technique for panic and overwhelming stress.',
            'type' => App\Enums\StressReductionTypes::from(3)->label(), // Grounding
            'duration_minutes' => 7,
            'difficulty_level' => 'beginner',
            'created_by' => App\Enums\UserRoleTypes::from(2)->label(),
            'is_active' => true,
            'created_at' => '2025-01-03 11:15:00',
            'updated_at' => '2025-01-03 11:15:00',
            'steps' => [
                [
                    'id' => 's3333333-cccc-4ccc-8ddd-000000000001',
                    'stress_reduction_id' => 'b1c2a3d4-3333-4ccc-8ddd-000000000003',
                    'step_order' => 1,
                    'instruction' => 'Look around and name five things you can see.',
                    'duration_seconds' => 60,
                ],
                [
                    'id' => 's3333333-cccc-4ccc-8ddd-000000000002',
                    'stress_reduction_id' => 'b1c2a3d4-3333-4ccc-8ddd-000000000003',
                    'step_order' => 2,
                    'instruction' => 'Notice four things you can physically feel.',
                    'duration_seconds' => 60,
                ],
                [
                    'id' => 's3333333-cccc-4ccc-8ddd-000000000003',
                    'stress_reduction_id' => 'b1c2a3d4-3333-4ccc-8ddd-000000000003',
                    'step_order' => 3,
                    'instruction' => 'Identify three things you can hear.',
                    'duration_seconds' => 60,
                ],
                [
                    'id' => 's3333333-cccc-4ccc-8ddd-000000000004',
                    'stress_reduction_id' => 'b1c2a3d4-3333-4ccc-8ddd-000000000003',
                    'step_order' => 4,
                    'instruction' => 'Notice two things you can smell and one thing you can taste.',
                    'duration_seconds' => 60,
                ],
            ],
        ],
        [
            'id' => 'b1c2a3d4-4444-4ddd-8eee-000000000004',
            'title' => 'Progressive Muscle Relaxation',
            'description' => 'Systematic tensing and relaxing of muscle groups to reduce stress.',
            'type' => App\Enums\StressReductionTypes::from(4)->label(), // Movement
            'duration_minutes' => 15,
            'difficulty_level' => 'intermediate',
            'created_by' => App\Enums\UserRoleTypes::from(1)->label(),
            'is_active' => true,
            'created_at' => '2025-01-04 14:00:00',
            'updated_at' => '2025-01-04 14:00:00',
            'steps' => [],
        ],
        [
            'id' => 'b1c2a3d4-5555-4eee-8fff-000000000005',
            'title' => 'Thought Reframing Exercise',
            'description' => 'A cognitive technique to challenge and reframe stressful thoughts.',
            'type' => App\Enums\StressReductionTypes::from(5)->label(), // Cognitive
            'duration_minutes' => 12,
            'difficulty_level' => 'intermediate',
            'created_by' => App\Enums\UserRoleTypes::from(2)->label(),
            'is_active' => true,
            'created_at' => '2025-01-05 16:45:00',
            'updated_at' => '2025-01-05 16:45:00',
            'steps' => [],
        ],
        [
            'id' => 'b1c2a3d4-6666-4fff-8aaa-000000000006',
            'title' => 'Emergency Calm Reset',
            'description' => 'A quick intervention designed for moments of intense stress or panic.',
            'type' => App\Enums\StressReductionTypes::from(7)->label(), // Emergency
            'duration_minutes' => 3,
            'difficulty_level' => 'beginner',
            'created_by' => App\Enums\UserRoleTypes::from(1)->label(),
            'is_active' => true,
            'created_at' => '2025-01-06 20:10:00',
            'updated_at' => '2025-01-06 20:10:00',
            'steps' => [
                [
                    'id' => 's4444444-dddd-4ddd-8eee-000000000001',
                    'stress_reduction_id' => 'b1c2a3d4-6666-4fff-8aaa-000000000006',
                    'step_order' => 1,
                    'instruction' => 'Place one hand on your chest and one on your abdomen.',
                    'duration_seconds' => null,
                ],
                [
                    'id' => 's4444444-dddd-4ddd-8eee-000000000002',
                    'stress_reduction_id' => 'b1c2a3d4-6666-4fff-8aaa-000000000006',
                    'step_order' => 2,
                    'instruction' => 'Take three slow, deep breaths, focusing on the rise and fall of your body.',
                    'duration_seconds' => 90,
                ],
                [
                    'id' => 's4444444-dddd-4ddd-8eee-000000000003',
                    'stress_reduction_id' => 'b1c2a3d4-6666-4fff-8aaa-000000000006',
                    'step_order' => 3,
                    'instruction' => 'Silently remind yourself that you are safe in this moment.',
                    'duration_seconds' => 30,
                ],
            ],
        ],
        [
            'id' => 'b1c2a3d4-7777-4aaa-8bbb-000000000007',
            'title' => 'Evening Wind-Down Meditation',
            'description' => 'A short mindfulness session to release stress before sleep.',
            'type' => App\Enums\StressReductionTypes::from(2)->label(), // Mindfulness
            'duration_minutes' => 8,
            'difficulty_level' => 'beginner',
            'created_by' => App\Enums\UserRoleTypes::from(1)->label(),
            'is_active' => false,
            'created_at' => '2025-01-07 21:30:00',
            'updated_at' => '2025-01-07 21:30:00',
            'steps' => [],
        ],
    ];

    $stressReductionSessions = [
        [
            'id' => 't1111111-aaaa-4aaa-8bbb-000000000001',
            'user_id' => 'u1000000-0000-4aaa-8bbb-000000000001',
            'stress_reduction_id' => 'b1c2a3d4-1111-4aaa-8bbb-000000000001', // 4-7-8 Breathing
            'started_at' => '2025-01-10 08:05:00',
            'ended_at' => '2025-01-10 08:10:00',
            'completion_rate' => 100,
            'stress_before' => 7,
            'stress_after' => 4,
            'notes' => 'Felt calmer after the third breathing cycle.',
        ],
        [
            'id' => 't1111111-aaaa-4aaa-8bbb-000000000002',
            'user_id' => 'u1000000-0000-4aaa-8bbb-000000000001',
            'stress_reduction_id' => 'b1c2a3d4-3333-4ccc-8ddd-000000000003', // 5-4-3-2-1 Grounding
            'started_at' => '2025-01-10 14:30:00',
            'ended_at' => '2025-01-10 14:37:00',
            'completion_rate' => 100,
            'stress_before' => 8,
            'stress_after' => 5,
            'notes' => 'Helped me refocus during a panic spike at work.',
        ],
        [
            'id' => 't1111111-aaaa-4aaa-8bbb-000000000003',
            'user_id' => 'u2000000-0000-4bbb-8ccc-000000000002',
            'stress_reduction_id' => 'b1c2a3d4-2222-4bbb-8ccc-000000000002', // Body Scan
            'started_at' => '2025-01-11 21:40:00',
            'ended_at' => '2025-01-11 21:50:00',
            'completion_rate' => 90,
            'stress_before' => 6,
            'stress_after' => 3,
            'notes' => 'Fell asleep near the end but felt very relaxed.',
        ],
        [
            'id' => 't1111111-aaaa-4aaa-8bbb-000000000004',
            'user_id' => 'u3000000-0000-4ccc-8ddd-000000000003',
            'stress_reduction_id' => 'b1c2a3d4-6666-4fff-8aaa-000000000006', // Emergency Calm Reset
            'started_at' => '2025-01-12 16:12:00',
            'ended_at' => '2025-01-12 16:15:00',
            'completion_rate' => 100,
            'stress_before' => 9,
            'stress_after' => 6,
            'notes' => 'Used during an argument; didn’t fully calm down but helped stabilize.',
        ],
        [
            'id' => 't1111111-aaaa-4aaa-8bbb-000000000005',
            'user_id' => 'u2000000-0000-4bbb-8ccc-000000000002',
            'stress_reduction_id' => 'b1c2a3d4-5555-4eee-8fff-000000000005', // Thought Reframing
            'started_at' => '2025-01-13 10:00:00',
            'ended_at' => '2025-01-13 10:12:00',
            'completion_rate' => 80,
            'stress_before' => 5,
            'stress_after' => 4,
            'notes' => 'Hard to challenge the thoughts, but I see the value.',
        ],
        [
            'id' => 't1111111-aaaa-4aaa-8bbb-000000000006',
            'user_id' => 'u1000000-0000-4aaa-8bbb-000000000001',
            'stress_reduction_id' => 'b1c2a3d4-4444-4ddd-8eee-000000000004', // Progressive Muscle Relaxation
            'started_at' => '2025-01-14 19:20:00',
            'ended_at' => '2025-01-14 19:35:00',
            'completion_rate' => 100,
            'stress_before' => 6,
            'stress_after' => 2,
            'notes' => 'Most effective technique so far; felt heavy relaxation.',
        ],
    ];

@endphp

<x-layout>
    <div class="max-h-46 overflow-x-auto">
        <table class="min-w-full divide-y-2 divide-gray-200 dark:divide-gray-700">
            <thead class="sticky top-0 bg-white ltr:text-left rtl:text-right dark:bg-gray-900">
                <tr class="*:font-medium *:text-gray-900 dark:*:text-white">
                    <th class="px-3 py-2 whitespace-nowrap">Title</th>
                    <th class="px-3 py-2 whitespace-nowrap">Description</th>
                    <th class="px-3 py-2 whitespace-nowrap">Type</th>
                    <th class="px-3 py-2 whitespace-nowrap">Duration (Minutes)</th>
                    <th class="px-3 py-2 whitespace-nowrap">Difficulty (Level)</th>
                    <th class="px-3 py-2 whitespace-nowrap">Created By</th>
                    <th class="px-3 py-2 whitespace-nowrap">Active</th>
                    <th class="px-3 py-2 whitespace-nowrap">Created At</th>
                    <th class="px-3 py-2 whitespace-nowrap">Updated At</th>
                    <th class="px-3 py-2 whitespace-nowrap">Steps</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($stressReductions as $stressReduction)
                    <tr class="*:text-gray-900 *:first:font-medium dark:*:text-white">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReduction['title'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReduction['description'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReduction['type'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReduction['duration_minutes'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReduction['difficulty_level'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReduction['created_by'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReduction['is_active'] ? 'Yes' : 'No' }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReduction['created_at'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReduction['updated_at'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            <ul>
                                @foreach ($stressReduction['steps'] as $stressReductionStep)
                                    <li> {{ $stressReductionStep['instruction'] }} </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>


    <div class="max-h-46 overflow-x-auto mt-6">
        <table class="min-w-full divide-y-2 divide-gray-200 dark:divide-gray-700">
            <thead class="sticky top-0 bg-white ltr:text-left rtl:text-right dark:bg-gray-900">
                <tr class="*:font-medium *:text-gray-900 dark:*:text-white">
                    <th class="px-3 py-2 whitespace-nowrap">User</th>
                    <th class="px-3 py-2 whitespace-nowrap">Stress Reduction</th>
                    <th class="px-3 py-2 whitespace-nowrap">Started At</th>
                    <th class="px-3 py-2 whitespace-nowrap">Ended At</th>
                    <th class="px-3 py-2 whitespace-nowrap">Completion Rate</th>
                    <th class="px-3 py-2 whitespace-nowrap">Stress Before(1-10)</th>
                    <th class="px-3 py-2 whitespace-nowrap">Stress After(1-10)</th>
                    <th class="px-3 py-2 whitespace-nowrap">Notes</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($stressReductionSessions as $stressReductionSession)
                    <tr class="*:text-gray-900 *:first:font-medium dark:*:text-white">
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReductionSession['user_id'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReductionSession['stress_reduction_id'] }}
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReductionSession['started_at'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReductionSession['ended_at'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReductionSession['completion_rate'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReductionSession['stress_before'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">
                            {{ $stressReductionSession['stress_after'] }}</td>
                        <td class="px-3 py-2 whitespace-nowrap">{{ $stressReductionSession['notes'] }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>

</x-layout>
