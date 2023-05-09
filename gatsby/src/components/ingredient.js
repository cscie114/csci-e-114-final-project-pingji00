import React from "react"
import { useStaticQuery, graphql } from "gatsby"

const Ingredient = () => {
  const { ingredient } = useStaticQuery(graphql`

    query food($fdcId: Int) {
      allDataJson(filter: {foods: {elemMatch: {fdcId: {eq: $fdcId}}}}) {
        nodes {
          ingredient: foods {
            description
            fdcId
            nutrientConversionFactors {
              carbohydrateValue
              fatValue
              proteinValue
            }
            foodClass
          }
        }
      }
    }

  `)


  return (
    <div className="Ingredient">

      {ingredient?.description && (
        <p>
          Nutriention of <strong>{ingredient.description}</strong>

          {ingredient?.nutrientConversionFactors && (
            <ul>
              <li>Carb: {ingredient.nutrientConversionFactors.carbohydrateValue}</li>
              <li>Carb: {ingredient.nutrientConversionFactors.fatValue}</li>
              <li>Carb: {ingredient.nutrientConversionFactors.proteinValue}</li>
            </ul>
          )}
        </p>
      )}
    </div>
  )
}

export default Ingredient
