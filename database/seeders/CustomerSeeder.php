<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            // New York (NY) - 15 customers
            ['first_name' => 'John', 'last_name' => 'Smith', 'city' => 'New York', 'state' => 'NY'],
            ['first_name' => 'Sarah', 'last_name' => 'Johnson', 'city' => 'New York', 'state' => 'NY'],
            ['first_name' => 'Michael', 'last_name' => 'Brown', 'city' => 'Albany', 'state' => 'NY'],
            ['first_name' => 'Emily', 'last_name' => 'Davis', 'city' => 'Buffalo', 'state' => 'NY'],
            ['first_name' => 'David', 'last_name' => 'Wilson', 'city' => 'Rochester', 'state' => 'NY'],
            ['first_name' => 'Jessica', 'last_name' => 'Miller', 'city' => 'Yonkers', 'state' => 'NY'],
            ['first_name' => 'Christopher', 'last_name' => 'Garcia', 'city' => 'Syracuse', 'state' => 'NY'],
            ['first_name' => 'Amanda', 'last_name' => 'Martinez', 'city' => 'New Rochelle', 'state' => 'NY'],
            ['first_name' => 'Matthew', 'last_name' => 'Anderson', 'city' => 'Mount Vernon', 'state' => 'NY'],
            ['first_name' => 'Ashley', 'last_name' => 'Taylor', 'city' => 'Schenectady', 'state' => 'NY'],
            ['first_name' => 'Joshua', 'last_name' => 'Thomas', 'city' => 'Utica', 'state' => 'NY'],
            ['first_name' => 'Stephanie', 'last_name' => 'Hernandez', 'city' => 'White Plains', 'state' => 'NY'],
            ['first_name' => 'Daniel', 'last_name' => 'Moore', 'city' => 'Hempstead', 'state' => 'NY'],
            ['first_name' => 'Jennifer', 'last_name' => 'Martin', 'city' => 'Troy', 'state' => 'NY'],
            ['first_name' => 'Andrew', 'last_name' => 'Jackson', 'city' => 'Niagara Falls', 'state' => 'NY'],

            // California (CA) - 20 customers
            ['first_name' => 'Robert', 'last_name' => 'Thompson', 'city' => 'Los Angeles', 'state' => 'CA'],
            ['first_name' => 'Michelle', 'last_name' => 'White', 'city' => 'San Francisco', 'state' => 'CA'],
            ['first_name' => 'William', 'last_name' => 'Harris', 'city' => 'San Diego', 'state' => 'CA'],
            ['first_name' => 'Kimberly', 'last_name' => 'Sanchez', 'city' => 'San Jose', 'state' => 'CA'],
            ['first_name' => 'James', 'last_name' => 'Clark', 'city' => 'Fresno', 'state' => 'CA'],
            ['first_name' => 'Lisa', 'last_name' => 'Ramirez', 'city' => 'Sacramento', 'state' => 'CA'],
            ['first_name' => 'Charles', 'last_name' => 'Lewis', 'city' => 'Long Beach', 'state' => 'CA'],
            ['first_name' => 'Angela', 'last_name' => 'Robinson', 'city' => 'Oakland', 'state' => 'CA'],
            ['first_name' => 'Thomas', 'last_name' => 'Walker', 'city' => 'Bakersfield', 'state' => 'CA'],
            ['first_name' => 'Brenda', 'last_name' => 'Young', 'city' => 'Anaheim', 'state' => 'CA'],
            ['first_name' => 'Joseph', 'last_name' => 'Allen', 'city' => 'Santa Ana', 'state' => 'CA'],
            ['first_name' => 'Pamela', 'last_name' => 'King', 'city' => 'Riverside', 'state' => 'CA'],
            ['first_name' => 'Richard', 'last_name' => 'Wright', 'city' => 'Stockton', 'state' => 'CA'],
            ['first_name' => 'Helen', 'last_name' => 'Scott', 'city' => 'Irvine', 'state' => 'CA'],
            ['first_name' => 'Kenneth', 'last_name' => 'Torres', 'city' => 'Chula Vista', 'state' => 'CA'],
            ['first_name' => 'Sharon', 'last_name' => 'Nguyen', 'city' => 'Fremont', 'state' => 'CA'],
            ['first_name' => 'Edward', 'last_name' => 'Hill', 'city' => 'San Bernardino', 'state' => 'CA'],
            ['first_name' => 'Laura', 'last_name' => 'Flores', 'city' => 'Modesto', 'state' => 'CA'],
            ['first_name' => 'Mark', 'last_name' => 'Green', 'city' => 'Fontana', 'state' => 'CA'],
            ['first_name' => 'Donna', 'last_name' => 'Adams', 'city' => 'Oxnard', 'state' => 'CA'],

            // Texas (TX) - 18 customers
            ['first_name' => 'Paul', 'last_name' => 'Nelson', 'city' => 'Houston', 'state' => 'TX'],
            ['first_name' => 'Carol', 'last_name' => 'Baker', 'city' => 'San Antonio', 'state' => 'TX'],
            ['first_name' => 'Steven', 'last_name' => 'Hall', 'city' => 'Dallas', 'state' => 'TX'],
            ['first_name' => 'Ruth', 'last_name' => 'Rivera', 'city' => 'Austin', 'state' => 'TX'],
            ['first_name' => 'Kevin', 'last_name' => 'Campbell', 'city' => 'Fort Worth', 'state' => 'TX'],
            ['first_name' => 'Sharon', 'last_name' => 'Mitchell', 'city' => 'El Paso', 'state' => 'TX'],
            ['first_name' => 'Brian', 'last_name' => 'Carter', 'city' => 'Arlington', 'state' => 'TX'],
            ['first_name' => 'Michelle', 'last_name' => 'Roberts', 'city' => 'Corpus Christi', 'state' => 'TX'],
            ['first_name' => 'George', 'last_name' => 'Gomez', 'city' => 'Plano', 'state' => 'TX'],
            ['first_name' => 'Laura', 'last_name' => 'Phillips', 'city' => 'Laredo', 'state' => 'TX'],
            ['first_name' => 'Timothy', 'last_name' => 'Evans', 'city' => 'Lubbock', 'state' => 'TX'],
            ['first_name' => 'Sarah', 'last_name' => 'Turner', 'city' => 'Garland', 'state' => 'TX'],
            ['first_name' => 'Jason', 'last_name' => 'Diaz', 'city' => 'Irving', 'state' => 'TX'],
            ['first_name' => 'Nancy', 'last_name' => 'Parker', 'city' => 'Amarillo', 'state' => 'TX'],
            ['first_name' => 'Jeffrey', 'last_name' => 'Cruz', 'city' => 'Grand Prairie', 'state' => 'TX'],
            ['first_name' => 'Karen', 'last_name' => 'Edwards', 'city' => 'Brownsville', 'state' => 'TX'],
            ['first_name' => 'Ryan', 'last_name' => 'Collins', 'city' => 'Pasadena', 'state' => 'TX'],
            ['first_name' => 'Betty', 'last_name' => 'Reyes', 'city' => 'Mesquite', 'state' => 'TX'],

            // Florida (FL) - 12 customers
            ['first_name' => 'Jacob', 'last_name' => 'Stewart', 'city' => 'Jacksonville', 'state' => 'FL'],
            ['first_name' => 'Helen', 'last_name' => 'Morris', 'city' => 'Miami', 'state' => 'FL'],
            ['first_name' => 'Gary', 'last_name' => 'Morales', 'city' => 'Tampa', 'state' => 'FL'],
            ['first_name' => 'Sandra', 'last_name' => 'Murphy', 'city' => 'Orlando', 'state' => 'FL'],
            ['first_name' => 'Nicholas', 'last_name' => 'Cook', 'city' => 'St. Petersburg', 'state' => 'FL'],
            ['first_name' => 'Donna', 'last_name' => 'Rogers', 'city' => 'Hialeah', 'state' => 'FL'],
            ['first_name' => 'Eric', 'last_name' => 'Reed', 'city' => 'Tallahassee', 'state' => 'FL'],
            ['first_name' => 'Carol', 'last_name' => 'Cooper', 'city' => 'Fort Lauderdale', 'state' => 'FL'],
            ['first_name' => 'Jonathan', 'last_name' => 'Bailey', 'city' => 'Port St. Lucie', 'state' => 'FL'],
            ['first_name' => 'Ruth', 'last_name' => 'Bell', 'city' => 'Cape Coral', 'state' => 'FL'],
            ['first_name' => 'Stephen', 'last_name' => 'Murphy', 'city' => 'Pembroke Pines', 'state' => 'FL'],
            ['first_name' => 'Sharon', 'last_name' => 'Richardson', 'city' => 'Hollywood', 'state' => 'FL'],

            // Illinois (IL) - 10 customers
            ['first_name' => 'Larry', 'last_name' => 'Cox', 'city' => 'Chicago', 'state' => 'IL'],
            ['first_name' => 'Michelle', 'last_name' => 'Howard', 'city' => 'Aurora', 'state' => 'IL'],
            ['first_name' => 'Justin', 'last_name' => 'Ward', 'city' => 'Rockford', 'state' => 'IL'],
            ['first_name' => 'Laura', 'last_name' => 'Torres', 'city' => 'Joliet', 'state' => 'IL'],
            ['first_name' => 'Scott', 'last_name' => 'Peterson', 'city' => 'Naperville', 'state' => 'IL'],
            ['first_name' => 'Sarah', 'last_name' => 'Gray', 'city' => 'Springfield', 'state' => 'IL'],
            ['first_name' => 'Brandon', 'last_name' => 'Ramirez', 'city' => 'Peoria', 'state' => 'IL'],
            ['first_name' => 'Kimberly', 'last_name' => 'James', 'city' => 'Elgin', 'state' => 'IL'],
            ['first_name' => 'Benjamin', 'last_name' => 'Watson', 'city' => 'Waukegan', 'state' => 'IL'],
            ['first_name' => 'Deborah', 'last_name' => 'Brooks', 'city' => 'Cicero', 'state' => 'IL'],

            // Pennsylvania (PA) - 8 customers
            ['first_name' => 'Samuel', 'last_name' => 'Kelly', 'city' => 'Philadelphia', 'state' => 'PA'],
            ['first_name' => 'Dorothy', 'last_name' => 'Sanders', 'city' => 'Pittsburgh', 'state' => 'PA'],
            ['first_name' => 'Gregory', 'last_name' => 'Price', 'city' => 'Allentown', 'state' => 'PA'],
            ['first_name' => 'Lisa', 'last_name' => 'Bennett', 'city' => 'Erie', 'state' => 'PA'],
            ['first_name' => 'Frank', 'last_name' => 'Wood', 'city' => 'Reading', 'state' => 'PA'],
            ['first_name' => 'Sandra', 'last_name' => 'Barnes', 'city' => 'Scranton', 'state' => 'PA'],
            ['first_name' => 'Raymond', 'last_name' => 'Henderson', 'city' => 'Bethlehem', 'state' => 'PA'],
            ['first_name' => 'Donna', 'last_name' => 'Coleman', 'city' => 'Lancaster', 'state' => 'PA'],

            // Ohio (OH) - 7 customers
            ['first_name' => 'Alexander', 'last_name' => 'Jenkins', 'city' => 'Columbus', 'state' => 'OH'],
            ['first_name' => 'Carol', 'last_name' => 'Perry', 'city' => 'Cleveland', 'state' => 'OH'],
            ['first_name' => 'Patrick', 'last_name' => 'Powell', 'city' => 'Cincinnati', 'state' => 'OH'],
            ['first_name' => 'Ruth', 'last_name' => 'Long', 'city' => 'Toledo', 'state' => 'OH'],
            ['first_name' => 'Jack', 'last_name' => 'Patterson', 'city' => 'Akron', 'state' => 'OH'],
            ['first_name' => 'Sharon', 'last_name' => 'Hughes', 'city' => 'Dayton', 'state' => 'OH'],
            ['first_name' => 'Dennis', 'last_name' => 'Flores', 'city' => 'Parma', 'state' => 'OH'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
