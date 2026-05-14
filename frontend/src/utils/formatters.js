// TODO: Expand these helpers when frontend pages are implemented.
export function formatCurrencyPlaceholder(amount) {
  return Number(amount || 0).toFixed(2);
}

export function formatDatePlaceholder(value) {
  return value || '';
}
