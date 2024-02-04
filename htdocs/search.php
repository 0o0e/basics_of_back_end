<!DOCTYPE html>
<html>
<head>
    <title>Company Search</title>
    <style>
        /* Basic styling for the search engine */
        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        input[type="text"], select, input[type="submit"] {
            padding: 8px;
            margin: 5px;
        }

        .results {
            margin-top: 20px;
            text-align: left;
        }

        .company {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Company Search</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            <label for="query">Search:</label>
            <input type="text" name="query" placeholder="Company name...">
            <label for="location">Location:</label>
            <input type="text" name="user_location" placeholder="Your location...">
            <label for="distance">Distance (miles):</label>
            <select name="distance">
                <option value="">Any</option>
                <option value="5">Within 5 miles</option>
                <option value="10">Within 10 miles</option>
                <!-- Add more distance options as needed -->
            </select>
            <label for="review">Review:</label>
            <select name="review">
                <option value="">Any</option>
                <option value="positive">Positive</option>
                <option value="neutral">Neutral</option>
                <option value="negative">Negative</option>
                <!-- Add more review options as needed -->
            </select>
            <input type="submit" value="Search">
        </form>
        <div class="results">
            <?php
            // Simulated company data
            $companies = array(
                array("name" => "Company A", "location" => "New York", "review" => "positive", "profile" => "company_a_profile.php"),
                array("name" => "Company B", "location" => "Los Angeles", "review" => "neutral", "profile" => "company_b_profile.php"),
                array("name" => "Company C", "location" => "Chicago", "review" => "negative", "profile" => "company_c_profile.php"),
                // Add more company data as needed
            );

            $filteredCompanies = $companies;

            // Filter companies based on user selections
            if (isset($_GET['query']) && !empty($_GET['query'])) {
                $query = strtolower($_GET['query']);
                $filteredCompanies = array_filter($filteredCompanies, function ($company) use ($query) {
                    return strpos(strtolower($company['name']), $query) !== false;
                });
            }

            if (isset($_GET['review']) && !empty($_GET['review'])) {
                $review = $_GET['review'];
                if ($review !== 'Any') {
                    $filteredCompanies = array_filter($filteredCompanies, function ($company) use ($review) {
                        return $company['review'] === $review;
                    });
                }
            }

            if (isset($_GET['user_location']) && !empty($_GET['user_location'])) {
                $userLocation = $_GET['user_location'];
                if ($userLocation !== 'Any') {
                    $filteredCompanies = array_filter($filteredCompanies, function ($company) use ($userLocation) {
                        return $company['location'] === $userLocation;
                    });
                }
            }

            if (empty($filteredCompanies)) {
                echo "No results found.";
            } else {
                foreach ($filteredCompanies as $company) {
                    echo '<div class="company">';
                    echo '<h3>' . $company['name'] . '</h3>';
                    echo '<p>Location: ' . $company['location'] . '</p>';
                    echo '<p>Review: ' . $company['review'] . '</p>';
                    echo '<a href="' . $company['profile'] . '" target="_blank">View Profile</a>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
